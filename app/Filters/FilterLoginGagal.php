<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class FilterLoginGagal implements FilterInterface
{
   public function before(RequestInterface $request, $arguments = null)
   {
      if (!session()->get('id_user')) {
         return redirect()->to('/Login');
      } else {
         return redirect()->to('/Dashboard');
      }
   }

   public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
   {
      // Do something here
   }
}
