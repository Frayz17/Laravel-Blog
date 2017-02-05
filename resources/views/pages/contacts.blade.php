@extends('main')

    @section('title', 'Contacts')

    @section('content')

      <div class="row">
        <div class="col-md-12">
          <h1>About Me</h1>
          <hr>

          <form class="" action="#" method="#">
            <div class="form-group">
              <label for="email" name="email">Email:</label>
              <input type="text" class="form-control" id="email" name="email" value="example@email.com">
            </div>
            <div class="form-group">
              <label for="subject" name="subject">Subject:</label>
              <input type="text" class="form-control" id="subject" name="subject" value="Theme of letter here">
            </div>
            <div class="form-group">
              <label for="message" name="message">Message:</label>
              <textarea type="text" class="form-control" id="message" name="message">Type your message here...</textarea>
            </div>

            <input type="submit" name="" value="Send Message" class="btn btn-success">
          </form>
        </div>
      </div>

  @endsection
