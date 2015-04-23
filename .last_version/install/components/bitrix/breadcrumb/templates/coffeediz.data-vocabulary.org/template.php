<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";
	
$strReturn .= '<ul>';

$num_items = count($arResult);
for($index = 0, $itemSize = $num_items; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$strReturn .= '<li id="breadcrumb-'.$index.'" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" ';
	if ($index != $itemSize-1) {
		$itemprop = $index+1;
		$strReturn .= 'itemref="breadcrumb-'.$itemprop.'" ';
	}

	if ($index > 0) {
		$strReturn .= 'itemprop="child"';
	}

	$strReturn .= '>';
		$strReturn .= '<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="url">';
			$strReturn .= '<span itemprop="title">'.$title.'</span>';
		$strReturn .= '</a>';
	$strReturn .= '</li>';
}

$strReturn .= '</ul>';

return $strReturn;?>