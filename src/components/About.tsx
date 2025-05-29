
import React from 'react';
import { Card, CardContent } from "@/components/ui/card";
import { Heart, Users, BookOpen, Award, Target, Shield } from 'lucide-react';

const About = () => {
  const values = [
    {
      icon: Heart,
      title: "Cuidado Personalizado",
      description: "Cada paciente recibe un plan de tratamiento único adaptado a sus necesidades específicas."
    },
    {
      icon: Users,
      title: "Equipo Especializado",
      description: "Profesionales altamente cualificados con formación continua en las últimas técnicas terapéuticas."
    },
    {
      icon: BookOpen,
      title: "Metodología Avanzada",
      description: "Utilizamos las técnicas más innovadoras y basadas en evidencia científica."
    },
    {
      icon: Award,
      title: "Excelencia Profesional",
      description: "Comprometidos con los más altos estándares de calidad en nuestros servicios."
    },
    {
      icon: Target,
      title: "Objetivos Claros",
      description: "Establecemos metas realistas y medibles para cada proceso terapéutico."
    },
    {
      icon: Shield,
      title: "Confianza Total",
      description: "Un entorno seguro y confidencial donde cada paciente se siente cómodo y protegido."
    }
  ];

  return (
    <section id="nosotros" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <h2 className="text-4xl font-bold text-gray-800 mb-6">
            ¿Por qué elegir 
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
              {" "}nuestro centro?
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
            En CREA, combinamos experiencia profesional, metodologías innovadoras y un enfoque 
            humano para ofrecer la mejor atención en logopedia y terapia del habla.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
          {values.map((value, index) => (
            <Card key={index} className="group hover:shadow-xl transition-all duration-300 hover:-translate-y-2 border-0 shadow-lg">
              <CardContent className="p-8 text-center">
                <div className="w-16 h-16 bg-gradient-to-br from-teal-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                  <value.icon className="w-8 h-8 text-white" />
                </div>
                <h3 className="text-xl font-semibold text-gray-800 mb-4">{value.title}</h3>
                <p className="text-gray-600 leading-relaxed">{value.description}</p>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Mission Statement */}
        <div className="bg-gradient-to-r from-teal-50 to-blue-50 rounded-3xl p-12 text-center">
          <h3 className="text-3xl font-bold text-gray-800 mb-6">Nuestra Misión</h3>
          <p className="text-lg text-gray-700 max-w-4xl mx-auto leading-relaxed">
            Mejorar la calidad de vida de nuestros pacientes a través de tratamientos especializados 
            en logopedia, proporcionando un espacio seguro donde cada persona pueda desarrollar al máximo 
            sus habilidades comunicativas. Creemos en el poder transformador de la comunicación efectiva 
            y trabajamos día a día para hacer realidad el potencial de cada uno de nuestros pacientes.
          </p>
        </div>
      </div>
    </section>
  );
};

export default About;
