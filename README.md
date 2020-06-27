# php-framework-mock
PHP Framework mock

## 仕様

### 方針
- Simple is the best.
- PHP 初心者が触りやすい/分かりやすい
- フレームワーク部分は薄くして全コード読んで流れが追えるくらいにする
- あれもこれもできるようにはしない、選択肢は1つにする
  - 用意されているクラスやメソッドは想定通りに使われるように可能な限り制約を設ける
- MVC

### 必須クラス
- Router
- Logger
- Input & Validation, Output (View)
- Controller
  - WebController
    - HtmlController
    - Api(Json)Controller
  - CliController

### オプション
- .editorconfig, .gitignore, .gitattributes
- PHPUnit

フレームワークに含めたくないけど欲しいやつ
- Swagger
- Docker

### できれば
- Composer からインストール `composer create-project`
- PSR 準拠
- IDE で定義へジャンプできるように PHPDoc を書く
- strict モードで型を定義

## 参考フレームワーク
- [Laravel](https://github.com/laravel/laravel)
- [FuelPHP](https://github.com/fuel/core)
- [CodeIgniter](https://github.com/bcit-ci/CodeIgniter), [CodeIgniter4](https://github.com/codeigniter4/CodeIgniter4)
