<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class PriceController extends Controller
{
    public function getPrice(Request $request, Response $response)
    {
        $args['price'] = $this->container->db->table('pricelist')->select()->get();
        $args['intro'] = $this->container->db->table('priceintro')->select()->first();
        $args['lang'] = $this->container->lang;
        return $this->container->view->render($response, '/admin/pages/price.twig', $args);
    }

    public function savePrice(Request $request, Response $response)
    {

        $this->container->db->table('priceintro')
            ->update([
                'intro_ru' => $request->getParam('intro_ru'),
                'intro_az' => $request->getParam('intro_az'),
            ]);

        $delete_item = $request->getParam('delete');

        $group_ru = $request->getParam('group_ru');
        $group_az = $request->getParam('group_az');
        $name_ru = $request->getParam('name_ru');
        $name_az = $request->getParam('name_az');
        $price = $request->getParam('price');

        foreach ($group_ru as $key => $value) {
            $data[] = [
                'group_ru' => $value,
                'group_az' => $group_az[$key],
                'name_ru' => $name_ru[$key],
                'name_az' => $name_az[$key],
                'price' => $price[$key],
            ];
        }

        if (!empty($delete_item)) {
            foreach ($delete_item as $value) {
                unset($data[$value]);
            }
        }

        if (!empty($data)) {
            $price_list_table = $this->container->db->table('pricelist');
            $price_list_table->delete();
            $price_list_table->insert($data);
        }

        $this->flash->addMessage('success', 'update_successfully');
        return $response->withRedirect($this->router->pathFor("admin.price"));
    }
}
