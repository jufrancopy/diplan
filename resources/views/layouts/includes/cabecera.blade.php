<!DOCTYPE html>
<html lang="es">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/imagenes/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
   <!-- EStilos CSS -->
    
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    
  <!-- CSS Files -->
  <link href="{{ asset('master/assets/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet">
  
  
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ asset('master/assets/demo/demo.css') }}" rel="stylesheet">
  
  <!-- CSS de personalizaciones de listas -->
  <link href="{{ asset('master/assets/css/personalizaciones.css') }}" rel="stylesheet">
</head>

