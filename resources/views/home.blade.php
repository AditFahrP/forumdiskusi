@extends('layouts.app')

@section('body')
          <section class="container hero">
            <div class="row align-items-center h-100">
              <div class="col-12 col-lg-6">
                <h1>The<br/>Comunity Forum</h1>
                <p class="mb-4">Lorem, ipsum.</p>
                <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
                <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusion</a>
              </div>
                <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
                  <img class="hero-image float-lg-end" src="{{ url('assests/images/hero-image.png') }}" alt="hero image">
                </div>
              </div>
            </div>
          </section>

          <section class="container min-h-372px">
            <div class="row">
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assests/images/discussions.svg') }}" alt="discussion-logo">
                <h2>Discusiions</h2>
                <p class="fs-3">Lorem, ipsum dolor.</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assests/images/answers.svg') }}" alt="answers-logo">
                <h2>Answer</h2>
                <p class="fs-3">Lorem, ipsum dolor.</p>
              </div>
              <div class="col-12 col-lg-4 text-center">
                <img class="promote-icon mb-2" src="{{ url('assests/images/users.svg') }}" alt="users-logo">
                <h2>Users</h2>
                <p class="fs-3">Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </section>

          <section class="bg-gray">
            <div class="container py-80px">
              <h2 class="text-center mb-5">Lorem ipsum</h2>
              <div class="row">
                <div class="col-12 col-lg-4 mb-3">
                  <div class="card">
                    <a href="#">
                      <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    </a>
                    <div>
                      <p class="mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      </p>
                      <div class="row">
                        <div class="col me-1 me-lg-2">
                          <a href="#"><span class="bagde rounded-pill text-bg-light">loremipsum</span></a>
                        </div>
                        <div class="col-5 col-lg-7">
                          <div class="avatar-sm-wrapp d-inline-block">
                            <a href="#" class="me-1">
                              <img class="avatar rounded-circle" src="{{ url('assests/images/avatar-sm.svg') }}" alt="avatar">
                            </a>
                          </div>
                          <span class="fs-12px">
                            <a href="#" class="me-1 fw-bold">Lorem</a>
                            <span class="color-gray">7 hour ago</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
            <h2>Lorem, ipsum?</h2>
            <p class="mb-4">Lorem ipsum dolor sit amet.</p>
            <div class="text-center">
              <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
              <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Disccusion</a>
            </div>
          </section>
@endsection
