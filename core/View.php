<?php

	class View {

		protected $_head, $_body, $_scripts,
		/*Defines default site Title in [../config/config.php][SITE_TITLE]*/ $_siteTitle = SITE_TITLE, $_outputBuffer,
		/*Defines default shared Layout in [../config/config.php][DEFAULT_LAYOUT]*/ $_layout = DEFAULT_LAYOUT;

		public function __construct() {
			#code here...
		}

		/*
		* Render the view to be displayed
		*/
		public function render($viewName) {
			$viewAry = explode('/', $viewName);
			$viewString = implode(DS, $viewAry);
			if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php')) {
				include(ROOT . DS . 'app' . DS . 'views' . DS . $viewString . '.php');
				include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
			} else {
				// Redirect page if request returns 0:[false]
				header("Location: ../_404?view={$viewName}");
			}
		}

		/*
		* Displays the [content] shared inside layouts and views [head->features; body->attr; scripts->plug-in]
		*/
		public function content($type) {
			// check content [type]
			if ($type == 'head') {
				return $this->_head;
			} elseif ($type == 'body') {
				return $this->_body;
			} elseif ($type == 'scripts') {
				return $this->_scripts;
			}
			return false;
		}

		/*
		* To [start] contents inside views
		*/
		public function start($type) {
			$this->_outputBuffer = $type;
			// start Output Buffer
			ob_start();
		}

		/*
		* Clean Outout Buffer and [finish] all started [ob] tasks
		*/
		public function end () {
			// check wich [ob] is started
			if ($this->_outputBuffer == 'head') {
				$this->_head = ob_get_clean();
			} elseif ($this->_outputBuffer == 'body') {
				$this->_body = ob_get_clean();
			} elseif ($this->_outputBuffer == 'scripts') {
				$this->_scripts = ob_get_clean();
			} else {
				// display error message
				die ('You must start **Output Buffer** first!');
			}
		}

		/*
		* Get site [title]
		*/
		public function siteTitle() {
			// returns default site [title]
			return $this->_siteTitle;
		}
		/*
		* Set site [title]
		*/
		public function setViewTitle ($title) {
			// defines the current view [title]
			$this->_siteTitle = $title;
		}

		/*
		* Set shared [layout]
		*/
		public function setLayout ($path) {
			$this->_layout = $path;
		}
	}
