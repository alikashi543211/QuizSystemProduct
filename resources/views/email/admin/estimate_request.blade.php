@extends('layouts.email')
@section('subject', 'Booking Request')
@section('content')
    <div>
        <h1 align="center" style="color: #14287b;font-size:24px;font-weight:bold;margin-top: 30px;text-transform:none;font-family: sans-serif;line-height: 1.4;margin-bottom: 30px;">Estimate Request</h1>
    </div>
    <p style="font-family: sans-serif;text-align:justify;color:grey;font-size:16px;margin-bottom: 30px;"><b>{{ ucfirst($est->name) }}, </b> send the following request.</p>

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

    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;box-sizing: border-box;margin-top:25px;">
        <tbody>
            <tr>
                <td style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color:#ff7833;border-radius: 5px;text-align: center;" align="center">
                    <table role="presentation" border="0" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: separate;mso-table-lspace: 0pt;mso-table-rspace: 0pt;min-width: 100%;width: 100%;">
                        <tbody>
                            <tr>
                                <td> <a style="font-family: sans-serif;font-size: 14px;vertical-align: top;background-color:#ff7833;border-radius: 5px;text-align: center;"> <a style="text-decoration: none;box-sizing: border-box;text-transform: capitalize;cursor: pointer;font-size: 14px;font-weight: bold;margin: 0;padding: 12px 25px;display: inline-block; border: solid 1px#ff7833;border-color:#ff7833;border-radius: 5px;color: #fffff5;" href="{{route('login')}}" target="_blank">Login</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

@endsection
