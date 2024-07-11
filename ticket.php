<html>
    <link rel="stylesheet" href="ticket.css.css">
<head>
    <title>Ticket</title>
	<link rel="icon" href="logos/fast.png" type="image/png">
</head>
<body>
    <h1>Ticket</h1>
    <div id="ticket">
        <div class="ticket-product">
            <p class="ticket-label">Comida :</p>
            <p id="producto1"></p>
            <p class="ticket-label">Precio:</p>
            <p class="ticket-price" id="precio1"></p>
        </div>

        <div class="ticket-product">
            <p class="ticket-label">Bebida :</p>
            <p id="producto2"></p>
            <p class="ticket-label">Precio:</p>
            <p class="ticket-price" id="precio2"></p>
        </div>

        <p id="total-label">Total:</p>
        <p id="total-value"></p>
        <a href="inicio.php" class="blue-button">Cancelar</a>
		<form action="genventa.php" method="post">
			<input type="text" hidden="true" name="prod1" id="produc1">
			<input type="text" hidden="true" name="prod2" id="produc2">
			<input type="number" hidden="true" name="prec1" id="pre1">
			<input type="number" hidden="true" name="prec2" id="pre2">
			<input type="number" hidden="true" name="total" id="tot">
			<button class="blue-button" type="submit">Confirmar</button>
		</form>
		<script>
			const audio = new audio();
			audio.scr = "sonidos/dinero.mp3"
		</script>


        
    </div>

    <script>
        var url = new URL(window.location.href);
        var params = new URLSearchParams(url.search);

        var producto1 = params.get("comn");
        var precio1 = parseFloat(params.get("comp"));
        var producto2 = params.get("bebn");
        var precio2 = parseFloat(params.get("bebp"));
		
		if (isNaN(precio1)  && isNaN(precio2)) {
            alert("Debes de escoger al menos un elemento del menu");
			window.location = "inicio.php";
        }else if(isNaN(precio1)){
			precio1 = 0;
			producto1 = "Ninguno"
		}else if(isNaN(precio2)){
			precio2 = 0;
			producto2 = "Ninguno"
		}
		
        document.getElementById("producto1").textContent = producto1;
        document.getElementById("precio1").textContent = "$" + precio1.toFixed(2);
        document.getElementById("producto2").textContent = producto2;
        document.getElementById("precio2").textContent = "$" + precio2.toFixed(2);
		document.getElementById("pre1").value = precio1.toFixed(2);
		document.getElementById("pre2").value = precio2.toFixed(2);
		document.getElementById("produc1").value = producto1;
		document.getElementById("produc2").value = producto2;

        var total = precio1 + precio2;
		document.getElementById("tot").value = total;
        document.getElementById("total-value").textContent = "$" + total.toFixed(2);
    </script>
</body>
</html>