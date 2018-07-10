<?php
function get_articlebyuser($id)
{
    $CI= get_instance();
    $articles = $CI->Articles_model->get_articles_by_user($id);
    return $articles;
}
function getsubjects()
{
    $CI= get_instance();
    $subjects = $CI->Subjects_model->get_subjects();
    return $subjects;
}
?>