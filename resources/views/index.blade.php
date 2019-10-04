@extends('layouts.app')

@section('title', 'One Page Layout')
@section('description', 'Layout Atoms Studio')
@section('web design', 'web development', 'UI UX design', 'marketing', 'SEO' )

@section('content')
  {{-- HEADER --}}
    <header>
      <div class="container h-100">
        <div class="row justify-content-sm-center justify-content-lg-end align-content-center text-sm-center text-lg-left h-100 pt-5">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <h1>We Design and Develop</h1>
            <p class="my-5">We are a new design studio based in USA. We have over 20 years of combined experience, and know a thing or two about designing websites and mobile apps.</p>
            <a class="custom-btn px-5 py-3" href="#">CONTACT US</a>
          </div>
        </div>
      </div>
    </header>
  {{-- ABOUT US --}}
  <div class="container-about-us bg-white">
    <div class="container">
      <div class="row text-center my-5">
        <div class="col-12">
          <h2>About Us</h2>
          <p class="my-5">
            Divide have don't man wherein air fourth. Own itself make have night won't make.
            A you under Seed appear which good give. Own give air without fowl moveth dry first
            heaven fruit, dominion she'd won't very all.
          </p>
          <img src="{{ asset('images/signature.png') }}" alt="Signature">
        </div>
      </div>
    </div>
  </div>
  {{-- PROFESSIONAL SKILLS --}}
  <div class="container-professional-skills bg-light">
    <div class="container w-90 h-100">
      <div class="row justify-content-sm-center justify-content-lg-start align-content-center text-sm-center text-lg-left h-100 pt-5">
        <div class="col-sm-12 col-md-12 col-lg-5">
          <h2 class="mb-5">Professional Skills</h2>
          <div class="skill">
            <h6>UI/UX Design    75%</h6>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="skill my-5">
            <h6>web development    90%</h6>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="skill">
            <h6>marketing    65%</h6>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- STATS ICON --}}
  <div class="container-stats-icon bg-aquamarine">
    <div class="container h-100">
      <div class="row text-white justify-content-center align-content-center h-100">
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-3">
                <i class="fas fa-briefcase fa-3x"></i>
              </div>
              <div class="col-9">
                <h6>548</h6>
                <p class="stat-text">PROJECTS COMPLETED</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-3">
                <i class="far fa-clock fa-3x"></i>
              </div>
              <div class="col-9">
                <h6>1465</h6>
                <p class="stat-text">WORKING HOURS</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-3">
                <i class="far fa-star fa-3x"></i>
              </div>
              <div class="col-9">
                <h6>612</h6>
                <p class="stat-text">POSITIVE FEEDBACKS</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-3">
                <i class="far fa-heart fa-3x"></i>
              </div>
              <div class="col-9">
                <h6>735</h6>
                <p class="stat-text">HAPPY CLIENTS</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
