<?php
    //Head
    include $level.com__path."head.php";

    if($isIndex == true)
    {
        include $level.tit__path.'title__index.php';
    }
    if($isInfopage == true)
    {
        include $level.tit__path.'title__infopage.php';
    }
    if($isProduct == true)
    {
        include $level.tit__path.'title__product.php';
    }
    if($isProductType == true)
    {
        include $level.tit__path.'title__product__type.php';
    }
    if($isCustomerAccount == true)
    {
        include $level.tit__path.'title__customer--account.php';
    }
    if($isBill == true)
    {
        include $level.tit__path.'title__bill.php';
    }
    if($isBillDetail == true)
    {
        include $level.tit__path.'title__billdetail.php';
    }
    if($isProvider == true)
    {
        include $level.tit__path.'title__provider.php';
    }
    if($isInsertProvider == true)
    {
        include $level.tit__path.'title__insert__provider.php';
    }
    if($isInsertBill == true)
    {
        include $level.tit__path.'title__insert__bill.php';
    }
    if($isInsertBillDetail == true)
    {
        include $level.tit__path.'title__insert__billdetail.php';
    }
    if($isInformationAdmin == true)
    {
        include $level.tit__path.'title__information__admin.php';
    }
    //Add Update Delete
    if($isInsertProduct == true)
    {
        include $level.tit__path.'title__insert__products.php'; 
    }
    if($isInsertProductType == true)
    {
        include $level.tit__path.'title__insert__producttype.php';
    }
    if($isInsertCustomerAccount == true)
    {
        include $level.tit__path.'title__insert__customeraccount.php';
    }
    if($isEditProduct == true)
    {
        include $level.tit__path.'title__edit__products.php'; 
    }
    if($isEditProductType == true)
    {
        include $level.tit__path.'title__edit__producttype.php'; 
    }
    if($isEditCustomerAccount == true)
    {
        include $level.tit__path.'title__edit__cusaccount.php'; 
    }
    if($isEditProvider == true)
    {
        include $level.tit__path.'title__edit__provider.php'; 
    }
    if($isBill == true)
    {
        include $level.tit__path.'title__edit__bill.php'; 
    }
    if($isEditBillDetail == true)
    {
        include $level.tit__path.'title__edit__billdetail.php'; 
    }
    if($isAdminAccount == true)
    {
        include $level.tit__path.'title__admin__account.php';
    }
    //Sidebar
    include $level.com__path.'sidebar.php';
    //Wrapper
    include $level.com__path.'wrapper__topbar.php';
    if($isIndex == true)
    {
        include $level.com__path.'index__main--content.php';
    }
    if($isInfopage == true)
    {
        include $level.com__path.'infopage--content.php';
    }
    if($isProduct == true)
    {
        include $level.com__path.'product--content.php';
    }
    if($isCustomerAccount == true)
    {
        include $level.com__path.'customer__account--content.php';
    }
    if($isProductType== true)
    {
        include $level.com__path.'product__type--content.php';
    }
    if($isBill== true)
    {
        include $level.com__path.'bill--content.php';
    }
    if($isBillDetail== true)
    {
        include $level.com__path.'billdetail--content.php';
    }
    if($isProvider == true)
    {
        include $level.com__path.'provider--content.php';
    }
    if($isInformationAdmin == true)
    {
        include $level.com__path.'information__admin--content.php';
    }
    //Add Update Delete
    if($isInsertProduct == true)
    {
        include $level.edi__path.'insert__products--content.php';
    }
    if($isInsertProductType == true)
    {
        include $level.edi__path.'insert__producttype--content.php';
    }
    if($isInsertCustomerAccount == true)
    {
        include $level.edi__path.'insert__customeraccount--content.php';
    }
    if($isInsertProvider == true)
    {
        include $level.edi__path.'insert__provider--content.php';
    }
    if($isInsertBill == true)
    {
        include $level.edi__path.'insert__bill--content.php';
    }
    if($isInsertBillDetail == true)
    {
        include $level.edi__path.'insert__billdetail--content.php';
    }
    if($isEditProduct == true)
    {
        include $level.edi__path.'edit__products--content.php';
    }
    if($isEditProductType == true)
    {
        include $level.edi__path.'edit__producttype--content.php';
    }
    if($isEditCustomerAccount == true)
    {
        include $level.edi__path.'edit__cusaccount--content.php';
    }
    if($isEditProvider == true)
    {
        include $level.edi__path.'edit__provider--content.php'; 
    }
    if($isEditBill == true)
    {
        include $level.edi__path.'edit__bill--content.php'; 
    }
    if($isEditBillDetail == true)
    {
        include $level.edi__path.'edit__billdetail--content.php'; 
    }
    if($isAdminAccount == true){
        include $level.edi__path.'edit__admin__account.php';
    }
    //Footer
    include $level.foo__path.'footer.php';
?>