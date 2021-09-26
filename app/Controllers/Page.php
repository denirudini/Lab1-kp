<?php namespace App\Controllers;

class Page extends BaseController
{
	public function about()
	{
		echo view("about");
	}
    public function login()
	{
		echo view("login");
	}
    public function contact()
	{
		echo view("contact");
	}
    public function pengumuman()
	{
		echo view("pengumuman");
	}
    public function alur()
	{
		echo view("alur");
	} public function fasilitas()
	{
		echo view("fasilitas");
	}
	public function register()
	{
		echo view("register");
	}
}