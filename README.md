## API LINK
<p align="center">
<a href="https://cart-laravel-api.herokuapp.com/">https://cart-laravel-api.herokuapp.com/</a>
</p>

## Front
<p align="center">
<a href="https://cart-vue-using-laravel-api.herokuapp.com/">https://cart-vue-using-laravel-api.herokuapp.com/</a>
</p>

## URL

+----------+-----------------------+------+----------------------------------------------+
| Method   | URI                   |      | Action                                       |
+----------+-----------------------+------+----------------------------------------------+

| GET|HEAD | api/cart              |      | App\Http\Controllers\CartController@index    |

| POST     | api/cart              |      | App\Http\Controllers\CartController@store    |

| DELETE   | api/cart              |      | App\Http\Controllers\CartController@destroy  |

| DELETE   | api/cart/{product_id} |      | App\Http\Controllers\CartController@delete   |

| GET|HEAD | api/products          |      | App\Http\Controllers\ProductController@index | 
