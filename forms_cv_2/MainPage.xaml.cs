using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;

namespace forms_cv_2
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private async void OnSubmitClicked(object sender, EventArgs e)
        {
            var nombre = nombreEntry.Text;
            var apellido = apellidoEntry.Text;
            var telefono = telefonoEntry.Text;
            var correo = correoEntry.Text;
            var ocupacion = ocupacionEntry.Text;

            var cvPage = new CVPage(nombre, apellido, telefono, correo, ocupacion);
            await Navigation.PushAsync(cvPage);
        }
    }
}
