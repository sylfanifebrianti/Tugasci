<html>
	<head>
		<title>Backend System</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	</head>
	<body>

				<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Sylfani</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarSupportedContent">
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link active" aria-current="page" href="<?php echo site_url('Welcome/DataSiswa'); ?>">Data Siswa</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo site_url('Welcome/Logout'); ?>">Log out</a>
		        </li>

		    </div>
		  </div>
		</nav>


				<td>
					<?php $this->load->view($content); ?>
				</td>
			</tr>
		</table>

	</body>
</html>
