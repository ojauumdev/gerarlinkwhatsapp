<!DOCTYPE html>
<html>
<head>
    <title>Mensagem WhatsApp</title>
    <!-- Adicione o CSS do Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">Enviar mensagem no WhatsApp</div>
                <div class="card-body">
                    <form method="post" action="{{ route('generate-link') }}">
                        @csrf
                        <div class="form-group">
                            <label for="phone_number">Número de telefone:</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="551112203033">
                        </div>
                        <div class="form-group">
                            <label for="message">Mensagem:</label>
                            <input type="text" class="form-control" id="message" name="message" placeholder="Insira aqui a sua mensagem!">
                        </div>
                        <button type="submit" class="btn btn-primary">Gerar Link</button>
                    </form>

                    @if(isset($whatsapp_url))
                        <div class="mt-3">
                            <a href="{{ $whatsapp_url }}" target="_blank" class="btn btn-success">Enviar no WhatsApp</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Adicione o JS do Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
