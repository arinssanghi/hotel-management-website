
class Router
{
	private $page;

	public function __Construct($page)
	{
		$this->page = $page;

		if(!file_exists('application/controllers/'.$this->page.'.php'))
		{
			$this->page = 'document_404';
		}
	}

	public function Rendering()
	{
		return require('application/controllers/'.$this->page.'.php');
	}
}
?>
