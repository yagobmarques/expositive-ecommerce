<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        return view('admin/home_admin');
    }

    public function gerenciarProdutos(Request $request)
    {
        $data["lista"] = Produto::all();
        return view('admin/gerenciar_produtos', $data);
    }

    public function novoProduto(Request $request)
    {
        return view('admin/novo_produto');
    }

    public function salvarProduto(Request $request)
    {
        $produto = new Produto();
        try {

            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if (
                !isset($_FILES['imagem']['error']) ||
                is_array($_FILES['imagem']['error'])
            ) {
                throw new \Exception('Invalid parameters.');
            }

            // Check $_FILES['upfile']['error'] value.
            switch ($_FILES['imagem']['error']) {
                case UPLOAD_ERR_OK:
                    break;
                case UPLOAD_ERR_NO_FILE:
                    throw new \Exception('No file sent.');
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    throw new \Exception('Exceeded filesize limit.');
                default:
                    throw new \Exception('Unknown errors.');
            }

            // You should also check filesize here.
            if ($_FILES['imagem']['size'] > 1000000) {
                throw new \Exception('Exceeded filesize limit.');
            }

            // // DO NOT TRUST $_FILES['upfile']['mime'] VALUE !!
            // // Check MIME Type by yourself.
            // $finfo = new finfo(FILEINFO_MIME_TYPE);
            // if (false === $ext = array_search(
            //     $finfo->file($_FILES['upfile']['tmp_name']),
            //     array(
            //         'jpg' => 'image/jpeg',
            //         'png' => 'image/png',
            //         'gif' => 'image/gif',
            //     ),
            //     true
            // )) {
            //     throw new \Exception('Invalid file format.');
            // }

            // You should name it uniquely.
            // DO NOT USE $_FILES['upfile']['name'] WITHOUT ANY VALIDATION !!
            // On this example, obtain safe unique name from its binary data.
            if (!move_uploaded_file(
                $_FILES['imagem']['tmp_name'],
                sprintf(
                    'images/product/%s.%s',
                    sha1_file($_FILES['imagem']['tmp_name']),
                    pathinfo($_FILES['imagem'] ['name'], PATHINFO_EXTENSION)
                )
            )) {
                throw new \Exception('Failed to move uploaded file.');
            }

            echo 'File is uploaded successfully.';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        die("im here");
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();
        return redirect('/admin/gerenciar_produtos');
    }
}
