## API LINK
<p align="center">
<a href="https://cart-laravel-api.herokuapp.com/">https://cart-laravel-api.herokuapp.com/</a>
</p>

## Front
<p align="center">
<a href="https://cart-vue-using-laravel-api.herokuapp.com/">https://cart-vue-using-laravel-api.herokuapp.com/</a>
</p>

## URL

+--------+----------+-----------------------+------+----------------------------------------------+------------+
| Domain | Method   | URI                   | Name | Action                                       | Middleware |
+--------+----------+-----------------------+------+----------------------------------------------+------------+
|        | GET|HEAD | /                     |      | Closure                                      | web   
     |
|        | GET|HEAD | api/cart              |      | App\Http\Controllers\CartController@index    | api   
     |
|        | POST     | api/cart              |      | App\Http\Controllers\CartController@store    | api   
     |
|        | DELETE   | api/cart              |      | App\Http\Controllers\CartController@destroy  | api   
     |
|        | DELETE   | api/cart/{product_id} |      | App\Http\Controllers\CartController@delete   | api   
     |
|        | GET|HEAD | api/products          |      | App\Http\Controllers\ProductController@index | api   
     |
+--------+----------+-----------------------+------+----------------------------------------------+-------
