<?php
AddEventHandler("main", "OnBeforeEventAdd", array("MyClass", "OnBeforeEventAddHandler"));
class MyClass
{
    function OnBeforeEventAddHandler(&$event, &$lid, &$arFields)
    {

        CEventLog::Add(array(
            "SEVERITY" => "SECURITY",
            "AUDIT_TYPE_ID" => "FEEDBACK_FORM",
            "MODULE_ID" => "main",
            "ITEM_ID" => $arFields['RS_RESULT_ID'],
            "DESCRIPTION" => "Замена данных в отсылаемом письме - " . $arFields['AUTHOR'],
        ));
    }
}