<?php
/*
UserSpice 4
An Open Source PHP User Management System
by the UserSpice Team at http://UserSpice.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="row">
<div class="col-xs-12">
<h1>Restablezca su contraseña.</h1>
<ol>
	<li>Ingrese su email y presione "Reestablecer"</li>
	<li>Revise su email y haga click en el link que se le envió por correo</li>
	<li>Siga las instrucciones indicadas en pantalla</li>
</ol>
<span class="bg-danger"><?=display_errors($errors);?></span>
<form action="forgot_password.php" method="post" class="form ">
	
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" name="email" placeholder="Dirección de email" class="form-control" autofocus>
	</div>

	<input type="hidden" name="csrf" value="<?=Token::generate();?>">
	<p><input type="submit" name="forgotten_password" value="Reestablecer" class="btn btn-primary"></p>
</form>

</div><!-- /.col -->
</div><!-- /.row -->