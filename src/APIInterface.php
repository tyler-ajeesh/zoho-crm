<?php

namespace Zoho\CRM;

interface APIInterface
{
    /**
     * [getModules description]
     * @return [type] [description]
     */
    function getModules();

    /**
     * [getFieldsByModule description]
     * @param  [type] $module [description]
     * @return [type]         [description]
     */
    function getFieldsByModule($module);

    /**
     * [getLayoutsByModule description]
     * @param  [type] $module [description]
     * @return [type]         [description]
     */
    function getLayoutsByModule($module);

    /**
     * [getRecords description]
     * @param  [type] $module [description]
     * @param  [type] $params [description]
     * @return [type]         [description]
     */
    function getRecords($module, $params);

    /**
     * [createRecords description]
     * @param  [type] $module  [description]
     * @param  [type] $records [description]
     * @return [type]          [description]
     */
    function createRecords($module, $records, $params);

    /**
     * [updateRecords description]
     * @param  [type] $module  [description]
     * @param  [type] $records [description]
     * @return [type]          [description]
     */
    function updateRecords($module, $id, $records, $params);

    /**
     * [upsertRecords description]
     * @param  [type] $module  [description]
     * @param  [type] $records [description]
     * @return [type]          [description]
     */
    function upsertRecords($module, $records);

    /**
     * [deleteRecords description]
     * @param  [type] $module  [description]
     * @param  [type] $records [description]
     * @return [type]          [description]
     */
    function deleteRecords($module, $records);

    /**
     * Get Related Records
     * @param  String   $parentModule
     * @param  String   $parentId
     * @param  String   $childModule
     * @param  Array    $params
     */
    function getRelatedRecords($parentModule, $parentId, $childModule, $params);


    /**
     * [searchRecords description]
     * @param  [type] $module      [description]
     * @param  [type] $mapCriteria [description]
     * @return [type]              [description]
     */
    function searchRecords($module, $mapCriteria);

    /**
     * [getRecordById description]
     * @param  [type] $module [description]
     * @param  [type] $id     [description]
     * @return [type]         [description]
     */
    function getRecordById($module, $id);

    /**
     * [updateRecord description]
     * @param  [type] $module [description]
     * @param  [type] $id     [description]
     * @param  [type] $record [description]
     * @return [type]         [description]
     */
    function updateRecord($module, $id, $record);

    /**
     * [deleteRecord description]
     * @param  [type] $module [description]
     * @param  [type] $id     [description]
     * @return [type]         [description]
     */
    function deleteRecord($module, $id);

    /**
     * [getAttachments description]
     * @param  [type] $module [description]
     * @param  [type] $id     [description]
     * @param  [type] $params [description]
     * @return [type]         [description]
     */
    function getAttachments($module, $id, $params);

    /**
     * [downloadAttachment description]
     * @param  [type] $module       [description]
     * @param  [type] $id           [description]
     * @param  [type] $attachmentId [description]
     * @return [type]               [description]
     */
    function downloadAttachment($module, $id, $attachmentId);

    /**
     * [uploadAttachment description]
     * @param  [type] $module   [description]
     * @param  [type] $id       [description]
     * @param  [type] $filePath [description]
     * @return [type]           [description]
     */
    function uploadAttachment($module, $id, $filePath);

    /**
     * [deleteAttachment description]
     * @param  [type] $module       [description]
     * @param  [type] $id           [description]
     * @param  [type] $attachmentId [description]
     * @return [type]               [description]
     */
    function deleteAttachment($module, $id, $attachmentId);

    /**
     * [getAllProfiles description]
     * @param  [type] $orgName       [description]
     * @param  [type] $orgId           [description]
     * @return [type]               [description]
     */
    function getAllProfiles($orgName, $orgId);

    /**
     * [getProfileById description]
     * @param  [type] $orgName       [description]
     * @param  [type] $orgId           [description]
     * @param String $profileId     [description]
     * @return [type]               [description]
     */
    function getProfileById($orgName, $orgId, $profileId);

    /**
     * [getAllUsers description]
     * @param  [type] $orgName       [description]
     * @param  [type] $orgId           [description]
     * @return [type]               [description]
     */
    function getAllUsers($orgName, $orgId);

    /**
     * [createNotes description]
     * @param  [type] $module       [description]
     * @param  [type] $parentId          [description]
     * @param  [type] $notes          [description]
     * @return [type]               [description]
     */
    function getNotes($module, $parentId, $params);

    /**
     * [createNotes description]
     * @param  [type] $module       [description]
     * @param  [type] $parentId          [description]
     * @param  [type] $notes          [description]
     * @return [type]               [description]
     */
    function createNotes($module, $parentId, $notes);

    /**
     * [updateNote description]
     * @param  String $module       [description]
     * @param  String $parentId          [description]
     * @param  String $noteId          [description]
     * @param  Array  $note
     * @return [type]               [description]
     */
    function updateNote($module, $parentId, $noteId, $note);

    /**
     * [convertRecord description]
     *
     * @param String    $module         Module Name
     * @param Array     $recordId       ID of the parent record of the note
     * @param Array     $params         Array of notes
     * @return Array    $response
     */
    function convertRecord($module, $recordId, $params);

    /**
     * [deleteNote description]
     * @param  [type] $module       [description]
     * @param  [type] $id           [description]
     * @param  [type] $noteId       [description]
     * @return [type]               [description]
     */
    function deleteNote($module, $id, $noteId);
}
