


@component('mail::message')

<html>
<body>
	<table width='700px'>
		<tr><td>&nbsp;</td></tr>
		<tr><td><img src="{{ asset('images/frontend_images/home/logo.png') }}"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Hello {{ $messageData['name'] }}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Thank you for shopping with us. Your order details are as below :-</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Order No: {{ $messageData['order_id'] }}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>
			<table width='95%' cellpadding="5" cellspacing="5" bgcolor="#f7f4f4">
				<tr bgcolor="#cccccc">
					<td>Product Name</td>
					<td>Product Code</td>
					
					<td>Quantity</td>
					<td>Unit Price</td>
				</tr>
				
				@foreach($messageData['productDetails'] as $product)
				
					<tr>
						<td>{{ $product['product_name'] }}</td>
						<td>{{ $product['product_code'] }}</td>
						
						<td>{{ $product['product_qty'] }}</td>
						<td>Tk {{ $product['product_price'] }}</td>
					</tr>
				@endforeach
				
				<tr>
					<td colspan="5" align="right">Grand Total</td><td>Tk {{ $messageData['grand_total'] }}</td>
				</tr>
			</table>
		</td></tr>
		<tr><td>
			<table width="100%">
				<tr>
					<td width="50%">
						
						<table>
							
							<tr>
								<td><strong>Bill To :-</strong></td>
							</tr>
							
							<tr>
								<td>{{ $messageData['username'] }}</td>
							</tr>
							<tr>
								<td>{{ $messageData['address'] }}</td>
							</tr>
							
								
							
							<tr>
								<td>{{ $messageData['mobile'] }}</td>
							</tr>
						</table>
					
					</td>
					<td width="50%">
						
				</tr>
			</table>
		</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>For any enquiries, you can contact us at <a href="mailto:rashed@pocketpharmacy.com">info@pocketpharmacy.com</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>Regards,<br> Team E-com</td></tr>
		<tr><td>&nbsp;</td></tr>
	</table>
</body>
</html>	
@endcomponent
