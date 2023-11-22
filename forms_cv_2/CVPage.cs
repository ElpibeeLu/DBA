using System;
using System.Collections.Generic;
using System.Text;

using Xamarin.Forms;
namespace forms_cv_2
{
    public partial class CVPage : ContentPage
    {
        public CVPage(string nombre, string apellido, string telefono, string correo, string ocupacion)
        {
            InitializeComponent();

            nombreLabel.Text = nombre;
            apellidoLabel.Text = apellido;
            telefonoLabel.Text = telefono;
            correoLabel.Text = correo;
            ocupacionLabel.Text = ocupacion;
        }
    }
}
