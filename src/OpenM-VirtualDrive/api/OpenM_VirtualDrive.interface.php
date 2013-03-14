<?php

Import::php("OpenM-Services.api.OpenM_Service");

/**
 *
 * @package OpenM 
 * @subpackage OpenM\OpenM-VirtualDrive\api
 * @author Gaël Saunier
 */
interface OpenM_VirtualDrive extends OpenM_Service {
    
    const RETURN_ELEMENT_ID_PARAMETER = "EID";
    const RETURN_ELEMENT_TYPE_PARAMETER = "ETY";
    const RETURN_ELEMENT_TYPE_DIRECTORY_VALUE = "DIR";
    const RETURN_ELEMENT_TYPE_FILE_VALUE = "FILE";
    const RETURN_FILE_MIME_TYPE_PARAMETER = "MTY";
    const RETURN_FILE_CONTENT_PARAMETER = "FCO";
    const RETURN_FILE_NAME_PARAMETER = "FNA";
    const RETURN_FILE_PARENT_DIRECTORY_PARAMETER = "FPD";
    const RETURN_FILE_CREATION_TIME_PARAMETER = "FCT";
    const RETURN_DIRECTORY_NAME_PARAMETER = "DNA";
    const RETURN_ELEMENT_LIST_PARAMETER = "ELI";
    
    const RETURN_ERROR_MESSAGE_NO_FREE_SPACE_FOUND_VALUE = "no free space found";
    const RETURN_ERROR_MESSAGE_DIRECTORY_NOT_FOUND_VALUE = "directory not found";
    const RETURN_ERROR_MESSAGE_FILE_NOT_FOUND_VALUE = "file not found";
    const RETURN_ERROR_MESSAGE_NOT_ENOUGH_RIGHTS_VALUE = "not enough rights to see this element";
        
    const VERSION = "1.0 beta";
        
    const NAME_PATTERN = "/^([0-9a-zA-Z]| |_|-|\.)+$/";
    const ELEMENT_ID_PATTERN = "/^(F|D)[0-9]+$/";
    const FILE_ID_PATTERN = "/^F[0-9]+$/";
    const DIR_ID_PATTERN = "/^D[0-9]+$/";
    const MIME_TYPE_PATTERN = "/^[0-9a-z]+\/([0-9a-zA-Z]|_|-|\.)+$/";
    
    public function getURL($fileIdJSONList);
    
    public function putFile($fileName, $fileEncode64, $mimeType, $dirId=null, $groupId=null);
    
    public function createDir($dirName, $parentDirId=null, $groupId=null);
    
    public function readDir($dirId=null);
    
    public function removeFile($fileId);
    
    public function removeDir($dirId,$recursive="false");
    
    public function copyFile($fileId, $toDirId, $groupId=null);
    
    public function moveFile($fileId, $toDirId, $groupId=null);
    
    public function getFile($fileId);
    
    public function changeRights($elementId, $groupId);
    
    public function rename($elementId, $newName);
}

?>