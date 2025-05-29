
import React from 'react';
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Textarea } from "@/components/ui/textarea";
import { Badge } from "@/components/ui/badge";
import { Phone, Mail, MapPin, Clock, Calendar, MessageSquare } from 'lucide-react';

const Contact = () => {
  const contactInfo = [
    {
      icon: Phone,
      title: "Teléfono",
      content: "+34 123 456 789",
      description: "Llámanos para solicitar cita",
      color: "from-blue-500 to-cyan-500"
    },
    {
      icon: Mail,
      title: "Email",
      content: "info@createrapia.com",
      description: "Escríbenos tus consultas",
      color: "from-green-500 to-emerald-500"
    },
    {
      icon: MapPin,
      title: "Dirección",
      content: "Calle de la Salud, 123",
      description: "Madrid, España 28001",
      color: "from-purple-500 to-pink-500"
    },
    {
      icon: Clock,
      title: "Horarios",
      content: "Lun - Vie: 9:00 - 20:00",
      description: "Sábados: 9:00 - 14:00",
      color: "from-orange-500 to-red-500"
    }
  ];

  const scheduleOptions = [
    "Primera consulta (evaluación)",
    "Sesión de logopedia infantil",
    "Rehabilitación neurológica",
    "Terapia de voz",
    "Consulta familiar",
    "Seguimiento de tratamiento"
  ];

  return (
    <section id="contacto" className="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <Badge className="bg-teal-100 text-teal-700 mb-4">Contacto</Badge>
          <h2 className="text-4xl font-bold text-gray-800 mb-6">
            ¿Listo para
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
              {" "}comenzar?
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Estamos aquí para ayudarte. Contacta con nosotros para solicitar una cita 
            o resolver cualquier duda sobre nuestros servicios.
          </p>
        </div>

        <div className="grid lg:grid-cols-3 gap-8 mb-12">
          {/* Contact Information */}
          <div className="lg:col-span-1">
            <div className="space-y-6">
              {contactInfo.map((info, index) => (
                <Card key={index} className="border-0 shadow-lg hover:shadow-xl transition-shadow duration-300">
                  <CardContent className="p-6">
                    <div className="flex items-start space-x-4">
                      <div className={`w-12 h-12 bg-gradient-to-br ${info.color} rounded-xl flex items-center justify-center flex-shrink-0`}>
                        <info.icon className="w-6 h-6 text-white" />
                      </div>
                      <div>
                        <h3 className="font-semibold text-gray-800 mb-1">{info.title}</h3>
                        <p className="text-lg font-medium text-gray-700 mb-1">{info.content}</p>
                        <p className="text-sm text-gray-600">{info.description}</p>
                      </div>
                    </div>
                  </CardContent>
                </Card>
              ))}
            </div>

            {/* Quick Actions */}
            <Card className="mt-6 border-0 shadow-lg bg-gradient-to-br from-teal-50 to-blue-50">
              <CardHeader>
                <CardTitle className="flex items-center">
                  <Calendar className="w-5 h-5 mr-2 text-teal-600" />
                  Cita Rápida
                </CardTitle>
              </CardHeader>
              <CardContent>
                <p className="text-gray-600 mb-4">¿Necesitas una cita urgente?</p>
                <Button className="w-full bg-teal-600 hover:bg-teal-700">
                  <Phone className="w-4 h-4 mr-2" />
                  Llamar Ahora
                </Button>
              </CardContent>
            </Card>
          </div>

          {/* Contact Form */}
          <div className="lg:col-span-2">
            <Card className="border-0 shadow-xl">
              <CardHeader>
                <CardTitle className="text-2xl text-gray-800 flex items-center">
                  <MessageSquare className="w-6 h-6 mr-3 text-teal-600" />
                  Solicitar Cita o Información
                </CardTitle>
              </CardHeader>
              <CardContent className="p-8">
                <form className="space-y-6">
                  <div className="grid md:grid-cols-2 gap-6">
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Nombre completo *
                      </label>
                      <Input 
                        placeholder="Tu nombre completo"
                        className="border-gray-300 focus:border-teal-600 focus:ring-teal-600"
                      />
                    </div>
                    <div>
                      <label className="block text-sm font-medium text-gray-700 mb-2">
                        Teléfono *
                      </label>
                      <Input 
                        placeholder="Tu número de teléfono"
                        className="border-gray-300 focus:border-teal-600 focus:ring-teal-600"
                      />
                    </div>
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                      Email *
                    </label>
                    <Input 
                      type="email"
                      placeholder="tu@email.com"
                      className="border-gray-300 focus:border-teal-600 focus:ring-teal-600"
                    />
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                      Tipo de consulta
                    </label>
                    <select className="w-full p-3 border border-gray-300 rounded-lg focus:border-teal-600 focus:ring-teal-600">
                      <option value="">Selecciona una opción</option>
                      {scheduleOptions.map((option, index) => (
                        <option key={index} value={option}>{option}</option>
                      ))}
                    </select>
                  </div>

                  <div>
                    <label className="block text-sm font-medium text-gray-700 mb-2">
                      Mensaje
                    </label>
                    <Textarea 
                      placeholder="Cuéntanos cómo podemos ayudarte..."
                      rows={4}
                      className="border-gray-300 focus:border-teal-600 focus:ring-teal-600"
                    />
                  </div>

                  <div className="flex items-start space-x-3">
                    <input type="checkbox" className="mt-1" />
                    <label className="text-sm text-gray-600">
                      Acepto la política de privacidad y el tratamiento de mis datos personales 
                      para la gestión de mi solicitud.
                    </label>
                  </div>

                  <Button size="lg" className="w-full bg-teal-600 hover:bg-teal-700 text-lg py-3">
                    Enviar Solicitud
                  </Button>
                </form>
              </CardContent>
            </Card>
          </div>
        </div>

        {/* Map placeholder */}
        <Card className="border-0 shadow-xl overflow-hidden">
          <div className="h-64 bg-gradient-to-r from-teal-100 to-blue-100 flex items-center justify-center">
            <div className="text-center">
              <MapPin className="w-12 h-12 text-teal-600 mx-auto mb-4" />
              <h3 className="text-xl font-semibold text-gray-800 mb-2">Nuestra Ubicación</h3>
              <p className="text-gray-600">Calle de la Salud, 123 - Madrid</p>
              <p className="text-gray-600">Fácil acceso en transporte público</p>
            </div>
          </div>
        </Card>
      </div>
    </section>
  );
};

export default Contact;
