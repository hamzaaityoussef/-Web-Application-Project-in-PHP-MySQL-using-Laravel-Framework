@extends('section/headerandfooter')


@section('stylesheet')
<link rel="stylesheet" href="/css/departement.css">
<style>
    body{
      background-color: white;
    }
    nav ul li a {
          color: #000000;
          font-weight: 700;
          text-decoration: none;
          text-transform: uppercase;
          transition: color 0.2s;
        }
  </style>
@endsection

@section('content')

<div class="container">
    <div class="génie-info">
      <img src="images/invite/info.jpeg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>Génie inofrmatique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>

    <div class="génie-chimique">
      <img src="images/invite/chimie.jpeg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>Génie chimique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>

    <div class="génie-mécanique">
      <img src="images/invite/mecanique.jpeg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>Génie mécanique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>

    <div class="génie-électrique">
      <img src="images/invite/electrique.jpeg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>Génie electrique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>

    <div class="math">
      <img src="images/invite/math.jpeg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>Mathématique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>

    <div class="physique">
      <img src="images/invite/physique.jpg" alt="Génie inofrmatique" width="240px" height="160px">
      <h3>physique</h3>
      <p>Chef:Pr.EL FELSOUFI ZOUBIR</p>
      <p><b>Email :</b> zelfelsoufi@uae.ac.ma</p>
    </div>
  </div>

@endsection