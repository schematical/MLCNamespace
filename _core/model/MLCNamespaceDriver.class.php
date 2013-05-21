<?php
abstract class MLCNamespaceDriver{
    public static function SetNamespace(BaseEntity $objEntity, $strNamespace){
        $objNamespace = new MLCNamespace();
        $objNamespace->Namespace = $strNamespace;
        $objNamespace->IdEntity = $objEntity->getId();
        $objNamespace->EntityType = get_class($objEntity);
        return $objNamespace;
    }
    public static function Load($strNamespace){
        $strNamespace = strtolower($strNamespace);
        $objNamespace = MLCNamespace::Query(
            sprintf(
               'WHERE namespace = "%s"',
                $strNamespace
            ),
            true
        );

        if(is_null($objNamespace)){
            return null;
        }
        return self::GetEntityByNamespaceObject($objNamespace);
    }

    public static function GetEntityByNamespaceObject($objNamespace){
        $strClassName = $objNamespace->EntityType;
        $objEntity = call_user_func($strClassName . '::LoadById', $objNamespace->IdEntity);
        return $objEntity;
    }

    public static function GetNamespaceByEntity(BaseEntity $objEntity, $blnReturnObject = false){
        $objNamespace = MLCNamespace::Query(
            sprintf(
                "WHERE idEntity = '%s' AND entityType = '%s'",
                $objEntity->getId(),
                get_class($objEntity)
            ),
            true
        );
        if (!is_null($objNamespace)) {
            if($blnReturnObject){
                return $objNamespace;
            }else{
                return $objNamespace->Namespace;
            }
        }
        return null;
    }

}