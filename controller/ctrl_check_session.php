<?php
session_start();
if(isset($_SESSION['login']))
{
   print 't';
}
else
{
   print 'f';
}