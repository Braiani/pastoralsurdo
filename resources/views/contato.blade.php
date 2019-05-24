@extends('layouts.master')

@section('content')
    <!-- ##### Contact Form Area Start ##### -->
    <div class="contact-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-title">
                        <h2>Entre em contato</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="contact-form-area">
                        <form action="{{ route('contato') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Nome" name="nome" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="mensagem" class="form-control" id="message" cols="30" rows="10" placeholder="Mensagem" required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn newspaper-btn mt-30 w-100" type="submit">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Endereço:</h6>
                        <p>{{ setting('contato.endereco') }}</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>Telefone:</h6>
                        <p>{{ setting('contato.tel') }}</p>
                    </div>
                    <!-- Single Contact Information -->
                    <div class="single-contact-information mb-30">
                        <h6>E-mail:</h6>
                        <p>{{ setting('contato.email') }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ##### Contact Form Area End ##### -->
@endsection