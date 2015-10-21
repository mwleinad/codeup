<?php

namespace App\Http;

class Flash {

	public function Create($title, $message, $level, $key = "flash_message")
	{
		//$title; echo $message; echo $level;
		session()->flash($key, [
			'title' => $title,
			'message' => $message,
			'level' => $level
		]);

	}

	public function toJson($title, $message, $level, $key = "flash_message")
	{
		//$title; echo $message; echo $level;
		$data = [
			'title' => $title,
			'message' => $message,
			'level' => $level
		];

		return json_encode($data);

	}

	public function Message($title, $message)
	{
		return $this->Create($title, $message, "info");
	}

	public function Success($title, $message)
	{
		return $this->Create($title, $message, "success");
	}

	public function Error($title, $message)
	{
		return $this->Create($title, $message, "error");
	}

	public function Overlay($title, $message, $level = "success")
	{
		return $this->Create($title, $message, $level, "flash_message_overlay");
	}

}