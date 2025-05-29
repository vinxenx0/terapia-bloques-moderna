
import React from 'react';
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Badge } from "@/components/ui/badge";
import { MessageCircle, Baby, Users, Brain, Mic, BookOpen, Calendar, ArrowRight } from 'lucide-react';

const Services = () => {
  const services = [
    {
      icon: MessageCircle,
      title: "Trastornos del Lenguaje",
      description: "Evaluación y tratamiento de dificultades en la comprensión y expresión del lenguaje oral y escrito.",
      features: ["Retrasos del lenguaje", "Trastornos específicos", "Afasias", "Disartrias"],
      color: "from-blue-500 to-cyan-500",
      bgColor: "bg-blue-50"
    },
    {
      icon: Baby,
      title: "Logopedia Infantil",
      description: "Intervención temprana especializada en el desarrollo comunicativo y del habla en niños.",
      features: ["Estimulación temprana", "Desarrollo fonológico", "Lectoescritura", "Comunicación aumentativa"],
      color: "from-pink-500 to-rose-500",
      bgColor: "bg-pink-50"
    },
    {
      icon: Brain,
      title: "Neurología del Habla",
      description: "Rehabilitación especializada para personas con lesiones neurológicas que afectan la comunicación.",
      features: ["Daño cerebral", "Ictus", "Traumatismos", "Enfermedades degenerativas"],
      color: "from-purple-500 to-indigo-500",
      bgColor: "bg-purple-50"
    },
    {
      icon: Mic,
      title: "Trastornos de la Voz",
      description: "Diagnóstico y tratamiento de problemas vocales en profesionales de la voz y público general.",
      features: ["Disfonías", "Nódulos vocales", "Rehabilitación vocal", "Técnica vocal"],
      color: "from-green-500 to-emerald-500",
      bgColor: "bg-green-50"
    },
    {
      icon: Users,
      title: "Terapia Familiar",
      description: "Orientación y formación a familias para optimizar el proceso terapéutico en casa.",
      features: ["Pautas familiares", "Estrategias comunicativas", "Apoyo emocional", "Seguimiento"],
      color: "from-orange-500 to-amber-500",
      bgColor: "bg-orange-50"
    },
    {
      icon: BookOpen,
      title: "Dificultades de Aprendizaje",
      description: "Intervención en trastornos que afectan el rendimiento académico y el aprendizaje.",
      features: ["Dislexia", "Disgrafía", "Discalculia", "TDAH"],
      color: "from-teal-500 to-cyan-500",
      bgColor: "bg-teal-50"
    }
  ];

  return (
    <section id="servicios" className="py-20 bg-gradient-to-br from-gray-50 to-blue-50">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <Badge className="bg-teal-100 text-teal-700 mb-4">Nuestros Servicios</Badge>
          <h2 className="text-4xl font-bold text-gray-800 mb-6">
            Servicios
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
              {" "}especializados
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Ofrecemos una amplia gama de servicios de logopedia adaptados a las necesidades 
            específicas de cada paciente, desde la infancia hasta la edad adulta.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          {services.map((service, index) => (
            <Card key={index} className="group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-0 shadow-lg overflow-hidden">
              <CardHeader className={`${service.bgColor} pb-6`}>
                <div className={`w-16 h-16 bg-gradient-to-br ${service.color} rounded-2xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform duration-300`}>
                  <service.icon className="w-8 h-8 text-white" />
                </div>
                <CardTitle className="text-xl text-gray-800">{service.title}</CardTitle>
                <CardDescription className="text-gray-600">
                  {service.description}
                </CardDescription>
              </CardHeader>
              <CardContent className="p-6">
                <div className="space-y-3 mb-6">
                  {service.features.map((feature, idx) => (
                    <div key={idx} className="flex items-center text-sm text-gray-600">
                      <div className="w-2 h-2 bg-teal-500 rounded-full mr-3"></div>
                      {feature}
                    </div>
                  ))}
                </div>
                <Button variant="outline" className="w-full group-hover:bg-teal-600 group-hover:text-white group-hover:border-teal-600 transition-colors duration-300">
                  Más información
                  <ArrowRight className="ml-2 w-4 h-4" />
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* CTA Section */}
        <div className="text-center bg-white rounded-3xl p-12 shadow-lg">
          <h3 className="text-3xl font-bold text-gray-800 mb-4">¿Necesitas una evaluación?</h3>
          <p className="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">
            Nuestro equipo está preparado para realizar una evaluación completa y personalizada. 
            El primer paso hacia la mejora de la comunicación comienza con una consulta.
          </p>
          <div className="flex flex-col sm:flex-row gap-4 justify-center">
            <Button size="lg" className="bg-teal-600 hover:bg-teal-700">
              <Calendar className="mr-2 w-5 h-5" />
              Reservar Evaluación
            </Button>
            <Button size="lg" variant="outline" className="border-teal-600 text-teal-600 hover:bg-teal-50">
              Consulta Telefónica
            </Button>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Services;
