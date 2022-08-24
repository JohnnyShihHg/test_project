<?php

namespace App\Services;

use App\Model\PaymentDetailModel;
use App\Model\PaymentModel;
use App\Model\ProductCategoryModel;
use App\Model\UserModel;


class PaymentService
{

    private $payment;
    private $paymentDetail;
    private $productCategory;
    private $user;



    public function __construct(
        PaymentModel $PaymentModel,
        PaymentDetailModel $paymentDetailModel,
        ProductCategoryModel $ProductCategoryModel,
        UserModel $UserModel
    ) {
        $this->payment = $PaymentModel;
        $this->paymentDetail = $paymentDetailModel;
        $this->productCategory = $ProductCategoryModel;
        $this->user = $UserModel;
    }
    /* 理應實現邏輯後調用方法 */
    public function GetAllPayment()
    {
        return $this->payment->GetAllPayment();
    }

    public function GetUserPayment($name)
    {
        /* 先透過name找使用者ID→找尋有此ID的訂單編號→撈出資料 */
        $uid = $this->user->GetUserID($name);
        return $this->payment->GetUserPayment($uid);
        // return $uid;
    }

    public function GetUserPaymentOrder($name, $id)
    {
        $uid = $this->user->GetUserID($name);
        return $this->payment->GetUserPaymentOrder($uid,$id);
    }
    public function CreatePayment($request)
    {
        /* 使用者ID 商品ID 商品名稱 */
        $user_entity_id = $request->input('userid');
        $product = $request->input('productsid');


        $PaymentDetailDate = [
            'user_entity_id' => $user_entity_id,
            'product' => $product,
        ];

        $this->paymentDetail->CreatePaymentDetail($PaymentDetailDate);
        //明細ID
        $PaymentDetailId = $this->paymentDetail->OrderPaymentDetailLastId();
        //只有一筆還沒做出數筆資料
        $total = $this->productCategory->GetTotal($product);

        $PaymentData = [
            'paymentstatus' => '訂購',
            'user_entity_id' => $user_entity_id,
            'payment_detail_entity_id' => $PaymentDetailId,
            'total' => $total
        ];
        $NewPayment = $this->payment->CreatePayment($PaymentData);
        //訂單
        $lastPayment = $this->payment->PaymentOrder();
        $lastPaymentDetail = $this->paymentDetail->OrderPaymentDetailId($PaymentDetailId);

        //創建關係連結
        $this->payment->MakeRLS($lastPayment, $lastPaymentDetail);

        if ($NewPayment) {
            return 'successful';
        } else {
            return 'ohh';
        }
    }
}
