var modulo = new Vue({
    el: '#json',
    created: function() {
        this.getCamapania();
    },
    data:{
        articulos:[],
        array : [],
        tipo : [],
        tipoFilter : []
    },
  
    methods:
        {
            getCamapania: function() {
                
                var urlModulo= window.location.origin+'/unat/json/json.json';
                axios.get(urlModulo).then(response =>{
                    this.array = response.data.Hoja1;

                    this.array.forEach(element => {
                        this.tipo.push(element.tipo)
                    });
                    
                    this.tipoFilter = new Set(this.tipo)

                }).catch(error => {
                });
            },

            getDocumentos: function(tipo)
            {
                console.log(tipo);
                this.articulos = []
                  this.array.forEach(element =>{
                    if(element.tipo == tipo){
                        this.articulos.push(element)
                    }
                  });
                console.log(this.articulos);
            }
           
        },
});

