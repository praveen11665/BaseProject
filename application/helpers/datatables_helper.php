<?php
/*
 * function that generate the action buttons edit, delete
 * This is just showing the idea you can use it in different view or whatever fits your needs
 */

function get_buttons($id, $url)
{
    $ci 	 = & get_instance();

    $html 	 = '<span class="actions">';
    $html   .= '<a href="' . base_url() .$url.'edit/'.$id .'" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';
    $html   .= '&nbsp;&nbsp;';
    $html   .= '<a href="' . base_url().$url.'delete/'.$id .'" title="Delete"><i class="os-icon os-icon-cancel-square"></i></a>';
    $html   .= '</span>';
    return $html;
}

function get_RoleButtons($id, $url)
{
    $ci      = & get_instance();

    $html    = '<span class="actions">';
    $html   .= '<a href="' . base_url() .$url.'edit/'.$id .'" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';
    $html   .= '</span>';
    return $html;
}

function get_ajax_buttons($id, $url)
{
    $ci 	 	= & get_instance();
    $formUrl 	= $url.'/ajaxLoadForm';
    $deleteUrl 	= base_url($url.'/delete/'.$id);

    $html 	 = '<span class="actions">';
    $html   .= '<a href="javascript:addNewPop(\''.$formUrl.'\', \''.$id.'\');" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';
    $html   .= '&nbsp;&nbsp;';
    $html   .= '<a href="javascript:confirmDelete(\''.$deleteUrl.'\');" href="' . base_url().$url.'delete/'.$id .'" title="Delete"><i class="os-icon os-icon-cancel-square"></i></a>';    
    $html   .= '</span>';
    return $html;
}

function get_ajax_buttons_page_form($id, $url)
{
    $ci         = & get_instance();
    $formUrl    =  base_url($url.'/edit/'.$id);
    $deleteUrl  = base_url($url.'/delete/'.$id);

    $html    = '<span class="actions">';
    $html   .= '<a href="' . base_url().$url.'edit/'.$id .'" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';
    $html   .= '&nbsp;&nbsp;';
    $html   .= '<a href="javascript:confirmDelete(\''.$deleteUrl.'\');" href="' . base_url().$url.'delete/'.$id .'" title="Delete"><i class="os-icon os-icon-cancel-square"></i></a>';    
    $html   .= '</span>';
    return $html;
}

function getStatus($status='')
{
	if($status == 1)
	{
		$html = '<span class="label text-success">Active</span>';
	}else
	{
		$html = '<span class="label text-danger">In-Active</span>';
	}

	return $html;
}

function get_disable_status($status='')
{
	if($status == 1)
    {
        $html = '<span class="label text-success">Enabled</span>';
    }else
    {
        $html = '<span class="label text-success">Disabled</span>';
    }


	return $html;
}

function get_date_timeformat($date='')
{
	if($date != '0000-00-00 00:00:00')
	{
		return date('d-M-Y', strtotime($date)).' <small>'.date('h:i A', strtotime($date)).'</small>';
	}else
	{
		return '-';
	}
}

function get_user_buttons($id, $url, $banned)
{
    $formUrl    = $url.'ajaxLoadForm';

    $ci 	 = & get_instance();

    $html 	 = '<span class="actions">';
    $html   .= '<a href="javascript:addNewPop(\''.$formUrl.'\', \''.$id.'\');" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';

    /*$html   .= '<a href="' . base_url() .$url.'edit/'.$id .'" title="Edit"><i class="os-icon os-icon-pencil-2"></i></a>';*/
    $html   .= '&nbsp;&nbsp;'; 
    
    if ($banned ==	0) 
    {
        $html   .= '<a href="' . base_url().$url.'statusUpdate/'.$id .'/1" title="Deactivate"><i class="os-icon os-icon-close"></i></a>';
    } 
    else
    {
    	$html   .= '<a href="' . base_url().$url.'statusUpdate/'.$id .'/0" title="Activate"><i class="os-icon os-icon-common-07"></i></a>';	
    } 
    $html   .= '&nbsp;&nbsp;'; 
    $html   .= '<a href="' . base_url().$url.'privilage/'.$id .'" title="Edit Privilege"><i class="os-icon os-icon-user-male-circle2"></i></a>';
    $html   .= '</span>';

    return $html;
}

function get_user_status($bannedStatus='')
{
	if($bannedStatus == 0)
	{
		$html = '<span class="label text-success">Active</span>';
	}else
	{
		$html = '<span class="label text-danger">Banned</span>';
	}

	return $html;
}

function get_image($image_path)
{
    $image_path = base_url().$image_path;
    if(getimagesize($image_path))
    {
        $html = '<a href="'.$image_path.'" title="Click image to open " target="_blank"><img src="'.$image_path.'" width="48" height="48"/></a>';
    }else
    {
        $image_path = base_url().'/public/images/No_image.png';
        $html = '<a href="'.$image_path.'" title="No Image Available" target="_blank"><img src="'.$image_path.'" width="48" height="48"/></a>';
    }
    return $html;
}
?>
