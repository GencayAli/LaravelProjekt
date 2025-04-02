{{-- die klassische Variante --}}

@component('card')
    @slot('title')
        Überschrift (klassische Variante)
    @endslot
     
    Der Inhalt der Karte (klassische Variante)

    @slot('footer')
        Der Footer
    @endslot
@endcomponent