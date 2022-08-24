## A Test 說明
    安裝完成後須先更新資料庫 php artisan db:seed,
    然後進行登入獲取 token 開始測試 API.
    登入API POST：http://127.0.0.1:8000/api/user
## 四支API
    列出所有商品 GET：http://127.0.0.1:8000/api/product
    列出所有訂單 GET：http://127.0.0.1:8000/api/payment
    建立訂單(需身分驗證) POST：http://127.0.0.1:8000/api/payment
    訂單細節(需身分驗證) GET：http://127.0.0.1:8000/api/payment/{$id}
## [2022/08/18] 更新
    方便起見 .env 也推到 github .
## [2022/08/20] 更新
    修正表格添加 Factory ,待測試 seeder.
## [2022/08/22] 更新
    Seeder測試成功.
    成功透過 Service 連接 Model 調用方法，也從 Controller 直接使用 Service 注入的方法成功.
    待完成指定API操作和資料庫關聯.
## [2022/08/23] 更新
    成功透過 with 取得 Model 間的關係.
    待設定完成所有 Model 的關係 就建立 API.


