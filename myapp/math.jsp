<html>
<body>
	<% int x = 0;
	int y = 3;
	int z = x + 2; 
	double input = new Double(request.getParameter("arg"));
	double sqrt = Math.sqrt(input);
	
	%> 
	
	Answer is <%= z * y %> 

	<h2> The sqaure root of <%= input %> is <%= sqrt %></h2>


</body>
</html>
