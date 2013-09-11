	</div><!--wrapper-->
</div><!--content-->
<footer class="footer container">
	<p>Versión Beta agosto 2013. Desarrollado por <a href="http://www.albertofortes.com" title="Freelance Front End developer">Alberto Fortes</a>.</p>
	<p>Angulistr es un fork de Vamos al Super añadiendo AngularJS. Está hecho con fines de aprendizaje, es Copyleft y puedes descargarlo libremente y mejor aún, contribuir a su mejora.</p>
	<p><strong>AnguListr</strong> usa <a href="http://codeigniter.com/">CodeIgniter 2</a>, <a href="http://benedmunds.com/ion_auth/">Ion Auth</a>, <a href="http://twitter.github.com/bootstrap">Bootstrap from Twitter</a>, <a href="http://gentleface.com/free_icon_set.html">Gentleface icons</a> y por supuesto <a href="http://angularjs.org/">AngularJS</a>.</p>
</footer>
<script>
	// menu select en smartphone:
	$("#smartphone-nav select").change(function() {
  		window.location = $(this).find("option:selected").val();
	});
	$('.dropdown-toggle').dropdown()
</script>
</body>
</html>