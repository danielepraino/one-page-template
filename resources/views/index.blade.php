@extends('layouts.app')

@section('title', 'One Page Layout')
@section('description', 'Layout Atoms Studio')
@section('web design', 'web development', 'UI UX design', 'marketing', 'SEO' )

@section('content')
  {{-- HEADER --}}
    <header>
      <div class="container w-90 h-100">
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
    <div class="container w-90 h-100">
      <div class="row text-white align-content-center h-100">
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
  {{-- TILE IMAGES --}}
  <div class="container-tile-images d-flex flex-row flex-wrap">
    <div class="row w-100">
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/light-grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/light-grey-tile.jpg') }}" alt="">
      </div>
    </div>
    <div class="row w-100">
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/light-grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/light-grey-tile.jpg') }}" alt="">
      </div>
      <div class="tile flex-fill">
        <img class="img-fluid w-100" src="{{ asset('images/grey-tile.jpg') }}" alt="">
      </div>
    </div>
    <div class="row w-100 text-center bg-light py-5">
      <div class="col-12">
        <a href="#">LOAD MORE WORK</a>
      </div>
    </div>
  </div>
  {{-- WORK PROCESS --}}
  <div class="container-work-process bg-white">
    <div class="container">
      <div class="row text-center my-5">
        <div class="col-12">
          <h2>Our Work Process</h2>
          <p class="my-5">
            Was years it seasons was there form he in in them together over that,
            third sixth gathered female creeping bearing behold years.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- SERVICES ICONS --}}
  <div class="container-services-icons bg-light">
    <div class="container w-90 text-center py-5">
      <div class="row my-5">
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
          <i class="far fa-gem fa-3x"></i>
          <h5 class="my-4">ui / ux design</h5>
          <p>Be set fourth land god darkness make it wherein own</p>
        </div>
      </div>
    </div>
  </div>
  {{-- QUOTE CAROUSEL --}}
  <div class="container-quote-carousel text-white bg-aquamarine">
    <div class="container text-center py-5 d-flex flex-column justify-content-center h-100">
      <div class="row">
        <div class="col-12">
          <h2>
            “ Outstanding job and exceeded all expectations. It was a pleasure
            to work with them on a sizable first project and am looking
            forward to start the next one asap.”
          </h2>
          <p class="text-white mt-4">Michael Hopkins</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-12 d-flex justify-content-center align-items-center">
          <div class="dot"></div>
          <div class="dot selected-dot mx-2"></div>
          <div class="dot"></div>
        </div>
      </div>
    </div>
  </div>
  {{-- BRANDS --}}
  <div class="container-brands">
    <div class="container w-90 d-flex justify-content-around flex-row flex-wrap my-5">
      <div class="brand">
        <img src="{{ asset('images/brand.png') }}" alt="Brand">
      </div>
      <div class="brand">
        <img src="{{ asset('images/brand.png') }}" alt="Brand">
      </div>
      <div class="brand">
        <img src="{{ asset('images/brand.png') }}" alt="Brand">
      </div>
      <div class="brand">
        <img src="{{ asset('images/brand.png') }}" alt="Brand">
      </div>
      <div class="brand">
        <img src="{{ asset('images/brand.png') }}" alt="Brand">
      </div>
    </div>
  </div>
  {{-- CONTACT FORM --}}
  <div class="container-contact-form bg-light py-5">
    <div class="container">
      <div class="row text-center my-5">
        <div class="col-sm-12 col-md-12 col-lg-8 mx-auto">
          <h2>Need a Project?</h2>
          <p class="mt-5">
            Let us know what you're looking for in an agency. We'll take a look and see
            if this could be the start of something beautiful.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-8 mx-auto text-center">
          <form>
            <div class="form-row">
              <div class="form-group col-sm-12 col-md-12 col-lg-6">
                <input type="text" class="form-control" id="inputName" placeholder="Your Name">
              </div>
              <div class="form-group col-sm-12 col-md-12 col-lg-6">
                <input type="email" class="form-control" id="inputEmail" placeholder="Your Email">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12 mt-2">
                <input type="text" class="form-control" id="inputTitle" placeholder="Your Title">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-12 mt-2">
                <textarea class="form-control" id="textareaComment" rows="8" placeholder="Your Comment"></textarea>
              </div>
            </div>
            <button type="submit" class="custom-btn px-5 py-3 my-5">SEND MESSAGE</button>
          </form>
        </div>
      </div>

    </div>
  </div>

@endsection
