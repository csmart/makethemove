<?php $page = 'index.php'; ?>
<?php include 'header.php'; ?>

	<div id="about">
		<h2><?php echo _("<em>Welcome!</em>"); ?></h2>
		<p><?php echo _("<strong>Make The Move</strong> aims to present Linux and open source software as viable alternatives to the system on your computer.<br /><br />
		These alternatives are both free (as in price) and free (as in freedom), and put <strong>you</strong> back in control of your system.<br /><br />
		This site is designed to flow from the <a href=\"foss.php\">What is FOSS?</a> section, however you may skip straight to any other.<br /><br />
		Enjoy!"); ?></p>
	</div>		
			<!-- Here follows the nice rectangular boxes -->
	<div class="container">	
	<table id="container">
		<tr>
			<td><a class="item" href="foss.php" id="foss">
				<?php echo _('What is FOSS?'); ?>
			</a></td>
			
			<td><a class="item" href="linux.php" id="linux">
				<?php echo _('What is Linux?'); ?>
			</a></td>
			
			<td><a class="item" href="software.php" id="software">
				<?php echo _('FOSS you might already use'); ?>
			</a></td>
		</tr><tr>	
			<td><a class="item" href="why.php" id="why">
                                <?php echo _('Why should I move?'); ?>
                        </a></td>
			
			<td><a class="item" href="data.php" id="data">
				<?php echo _('What about my data?'); ?>
			</a></td>
			
			<td><a class="item" href="considerations.php" id="considerations">
				<?php echo _('Other considerations'); ?>
			</a></td>
		</tr><tr>	
			<td><a class="item" href="action.php" id="action">
				<?php echo _('See it in action!'); ?>
			</a></td>
			
			<td><a class="item" href="getstarted.php" id="getstarted">
				<?php echo _('Get started!'); ?>
			</a></td>
			
			<td><a class="item" href="getinvolved.php" id="getinvolved">
				<?php echo _('How can I get involved?'); ?>
			</a></td>
		</tr>
	</table>
	</div>
			<!-- End of the boxes -->

<?php include 'footer.php'; ?>
