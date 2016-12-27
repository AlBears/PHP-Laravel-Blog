@extends('layouts.admin-master')

@section('styles')
  <link rel="stylesheet" href="{{ URL::to('css/modal.css') }}" >
@endsection

@section('content')
  <div class="container">
    @include('includes.info-box')
    <div class="card">
      <header>
        <nav>
          <ul>
            <li><a href="" class="btn">New Post</a></li>
            <li><a href="" class="btn">Show all posts</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <ul>
          <!-- if no posts -->
          <li>No Posts</li>
          <!-- if posts -->
          <li>
            <article>
              <div class="post-info">
                <h3>Post Title</h3>
                <span class="info">Post Author | Date</span>
              </div>
              <div class="edit">
                <nav>
                  <ul>
                    <li><a href="">View Post</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="" class="danger">Delete</a></li>
                  </ul>
                </nav>
              </div>
            </article>
          </li>
        </ul>
      </section>
    </div>

    <div class="card">
      <header>
        <nav>
          <ul>
            <li><a href="" class="btn">Show all Messages</a></li>
          </ul>
        </nav>
      </header>
      <section>
        <ul>
          <!-- if no messages -->
          <li>No Messages</li>
          <!-- if messages -->
          <li>
            <article data-message="Body" data-id="ID">
              <div class="message-info">
                <h3>Message Subject</h3>
                <span class="info">Sender: ... | Date</span>
              </div>
              <div class="edit">
                <nav>
                  <ul>
                    <li><a href="">View</a></li>
                    <li><a href="" class="danger">Delete</a></li>
                  </ul>
                </nav>
              </div>
            </article>
          </li>
        </ul>
      </section>
    </div>

  </div>
  <div class="modal" id="contact-message-info">
    <button class="btn" id="modal-close">Close</button>
  </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    var token = '{{ Session::token() }}';
  </script>
  <script type="text/javascript" src="{{ URL::secure('js/modal.js') }}"></script>
  <script type="text/javascript" src="{{ URL::secure('js/contact-messages.js') }}"></script>
@endsection
