$("#origin, #destination").autocomplete({
    serviceUrl: "https://cargas.com.br/api/cities/search",
    params: {
      _token: $('meta[name="csrf-token"]').attr('content')
    },
    type: 'GET',
    dataType: 'json',
    minChars: '2',
    lookupLimit: '5',
    onSelect: function (suggestion) {
      $('#' + $(this).attr('id')).val(suggestion.value);
      $('#' + $(this).attr('id') + '_id').val(suggestion.id);
    }
  });