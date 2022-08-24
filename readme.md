## A Test 說明
    [2022/08/24]更新
        JWT 驗證未完成可不透過 Token 直接測試,
        測試前請先更新資料庫 php artisan db:seed,
        本身是透過 postman 測試 api 測試前請先建立訂單.

        有任何問題還請在告知,謝謝.
        
------------------------------------------------------------------------------------------------
    (X)安裝完成後須先更新資料庫 php artisan db:seed,
       然後進行登入獲取 token 開始測試 API.
       登入API POST：http://127.0.0.1:8000/api/user
    
## 四支API
    列出所有商品 GET：http://127.0.0.1:8000/api/product
    列出所有訂單 GET：http://127.0.0.1:8000/api/payment
    建立訂單(需身分驗證) POST：http://127.0.0.1:8000/api/payment
    /* 測驗時帶入參數
       userid : 1
       producstid : 1
    */
    訂單細節(需身分驗證) GET：http://127.0.0.1:8000/api/payment/{name}/{id}
    /* 測驗時依照rand出來的使用者寫入
       userid : test1~4
       producstid : 建立訂單時帶入的值
    */
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
## [2022/08/24] 更新
    未完成項目
    1. JWT 驗證失敗.
    2. total 加總語法還需研究目前只有將單筆資料的值撈出來.

