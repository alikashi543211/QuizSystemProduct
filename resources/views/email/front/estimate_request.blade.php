@extends('layouts.email')
@section('subject', 'Booking Request')
@section('content')
	<div>
	    <h1 align="center" style="color: #14287b;font-size:24px;font-weight:bold;margin-top: 30px;text-transform:none;font-family: sans-serif;line-height: 1.4;margin-bottom: 30px;">Estimate Request</h1>
	</div>
	<p style="font-family: sans-serif;text-align:justify;color:grey;font-size:16px;margin-bottom: 0px;">Thank you <b>{{ ucfirst($est->name) }}, </b> we received your request and we will get back to you soon.</p>



	<p style="font-family: sans-serif;text-align:justify;color:grey;font-size:16px;margin-bottom: 30px;">Here is your request detail</p>

	<table style="width:100%;color:grey !important;text-align: center !important;padding: 4px;border-collapse:collapse;border:1px solid grey;">
		<tr>
			<th style="border:1px solid grey;padding:5px;">ID</th>
			<th style="border:1px solid grey;padding:5px;">Property</th>
			<th style="border:1px solid grey;padding:5px;">Interval</th>
			<th style="border:1px solid grey;padding:5px;">Service</th>
			<th style="border:1px solid grey;padding:5px;">Hours</th>
			<th style="border:1px solid grey;padding:5px;">Price</th>
			<th style="border:1px solid grey;padding:5px;">Phone</th>
			<th style="border:1px solid grey;padding:5px;">Address</th>
		</tr>
		<tr>
			<td style="border:1px solid grey;padding:5px;">{{ $est->id ?? '' }}</td>
			<td style="border:1px solid grey;padding:5px;">{{ $est->property ?? '' }}</td>
			<td style="border:1px solid grey;padding:5px;">
				@if($est->interval == '1')
                    One Time
                @elseif($est->interval == '2')
                    Weekly
                @elseif($est->interval == '3')
                    Bi Weekly
                @endif
			</td>
			<td style="border:1px solid grey;padding:5px;">{{ $est->category->name ?? '' }}</td>
			<td style="border:1px solid grey;padding:5px;">{{ $est->hours ?? '' }} - hours </td>
			<td style="border:1px solid grey;padding:5px;">£{{ $est->amount ?? '' }}</td>
			<td style="border:1px solid grey;padding:5px;">{{ $est->phone ?? '' }}</td>
			<td style="border:1px solid grey;padding:5px;">{{ $est->address ?? '' }}</td>
		</tr>
	</table>

@endsection
