<?php 
namespace App\Controllers;

use App\Models\Products_model;

class Dashboard extends BaseController
{
    public function index() {
        $productModel = new Products_model();
        $data['products'] = $productModel->findAll();

        $data['title'] = 'Products Management - Landing Page';
        return view('include/header', $data)
            . view('dashboard', $data)
            . view('include/footer');
    }

    public function addProduct() {
        $productModel = new Products_model();

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
            'stock_quantity' => $this->request->getPost('stock_quantity'),
            'date_created' => date('Y-m-d H:i:s'),
            'date_updated' => date('Y-m-d H:i:s'),
        ];

        // Check if any field is null
        if (empty($data['product_name']) || empty($data['product_price']) || empty($data['stock_quantity'])) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        $productModel->insert($data);

        return redirect()->to('/dashboard');
    }

    public function showAddProductForm() {
        $data['title'] = 'Add Product';
        return view('include/header', $data)
            . view('addproduct')
            . view('include/footer');
    }

    public function viewproduct($id) {
        $productModel = new Products_model();
        $data['product'] = $productModel->find($id);

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product not found');
        }

        $data['title'] = 'View Product';
        return view('include/header', $data)
            . view('viewproduct', $data)
            . view('include/footer');
    }

    public function editproduct($id) {
        $productModel = new Products_model();
        $data['product'] = $productModel->find($id);

        if (empty($data['product'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product not found');
        }

        $data['title'] = 'Edit Product';
        return view('include/header', $data)
            . view('editproduct', $data)
            . view('include/footer');
    }

    public function updateProduct($id) {
        $productModel = new Products_model();

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_price' => $this->request->getPost('product_price'),
            'stock_quantity' => $this->request->getPost('stock_quantity'),
            'date_updated' => date('Y-m-d H:i:s'),
        ];

        if (empty($data['product_name']) || empty($data['product_price']) || empty($data['stock_quantity'])) {
            return redirect()->back()->with('error', 'All fields are required.');
        }

        $productModel->update($id, $data);

        return redirect()->to('/dashboard');
    }

    public function deleteproduct($id) {
        $productModel = new Products_model();
        $product = $productModel->find($id);

        if (empty($product)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Product not found');
        }

        $productModel->delete($id);

        return redirect()->to('/dashboard');
    }
}