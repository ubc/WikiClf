<?php if ( !$this->data['loggedin'] ): ?>
<div id="p-login" class="portal">
	<h5>Login</h5>  
	<div class="body">
		<ul>
			<li>
				<a href="<?php echo $this->data['personal_urls']['login']['href'] ?>">
					<img src="/skins/ubc/img/cwl_login.png" alt="cwl_login" width="83" height="35" />
				</a>
			</li>
		</ul>
	</div>      
</div>
<?php endif; ?>