<?php
function memberMainPath()
{
	return public_path('members_data');
}
function memberPath($uid=null)
{
	return public_path('members_data/'.$uid);
}