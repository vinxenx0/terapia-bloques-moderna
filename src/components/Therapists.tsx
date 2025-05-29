
import React from 'react';
import { Card, CardContent } from "@/components/ui/card";
import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Award, BookOpen, Heart, Star } from 'lucide-react';

const Therapists = () => {
  const therapists = [
    {
      name: "Dra. María González",
      title: "Directora y Logopeda Senior",
      image: "https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=400&h=400&fit=crop&crop=face",
      specialties: ["Neurología del Habla", "Trastornos del Lenguaje", "Afasias"],
      experience: "15+ años",
      education: "Doctora en Logopedia - Universidad Complutense",
      description: "Especialista en rehabilitación neurológica con amplia experiencia en trastornos del habla y lenguaje."
    },
    {
      name: "Lic. Ana Martín",
      title: "Logopeda Infantil",
      image: "https://images.unsplash.com/photo-1594824388597-9bd99bcf6e60?w=400&h=400&fit=crop&crop=face",
      specialties: ["Logopedia Infantil", "Estimulación Temprana", "Lectoescritura"],
      experience: "8+ años",
      education: "Grado en Logopedia - Universidad de Valencia",
      description: "Experta en desarrollo infantil y estimulación temprana, con formación especializada en autismo."
    },
    {
      name: "Lic. Carmen Ruiz",
      title: "Especialista en Voz",
      image: "https://images.unsplash.com/photo-1612349317150-e413f6a5b16d?w=400&h=400&fit=crop&crop=face",
      specialties: ["Trastornos de la Voz", "Técnica Vocal", "Rehabilitación Vocal"],
      experience: "10+ años",
      education: "Grado en Logopedia + Máster en Voz",
      description: "Especializada en patología vocal y técnica vocal para profesionales de la voz y cantantes."
    },
    {
      name: "Lic. David López",
      title: "Logopeda Neurológico",
      image: "https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=400&fit=crop&crop=face",
      specialties: ["Daño Cerebral", "Ictus", "Degeneración Neurológica"],
      experience: "12+ años",
      education: "Grado en Logopedia + Máster en Neuropsicología",
      description: "Experto en rehabilitación tras daño cerebral y enfermedades neurodegenerativas."
    }
  ];

  return (
    <section id="equipo" className="py-20 bg-white">
      <div className="container mx-auto px-4">
        <div className="text-center mb-16">
          <Badge className="bg-blue-100 text-blue-700 mb-4">Nuestro Equipo</Badge>
          <h2 className="text-4xl font-bold text-gray-800 mb-6">
            Profesionales
            <span className="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
              {" "}especializados
            </span>
          </h2>
          <p className="text-xl text-gray-600 max-w-3xl mx-auto">
            Contamos con un equipo multidisciplinar de logopedas altamente cualificados, 
            cada uno especializado en diferentes áreas de la terapia del habla y lenguaje.
          </p>
        </div>

        <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
          {therapists.map((therapist, index) => (
            <Card key={index} className="group hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border-0 shadow-lg overflow-hidden">
              <div className="relative">
                <img
                  src={therapist.image}
                  alt={therapist.name}
                  className="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
              </div>
              <CardContent className="p-6">
                <div className="mb-4">
                  <h3 className="text-xl font-bold text-gray-800 mb-1">{therapist.name}</h3>
                  <p className="text-teal-600 font-medium mb-3">{therapist.title}</p>
                  <p className="text-gray-600 text-sm leading-relaxed mb-4">{therapist.description}</p>
                </div>

                <div className="space-y-3 mb-6">
                  <div className="flex items-center text-sm text-gray-600">
                    <Award className="w-4 h-4 mr-2 text-teal-600" />
                    <span>{therapist.experience} de experiencia</span>
                  </div>
                  <div className="flex items-center text-sm text-gray-600">
                    <BookOpen className="w-4 h-4 mr-2 text-blue-600" />
                    <span>{therapist.education}</span>
                  </div>
                </div>

                <div className="space-y-2 mb-6">
                  <p className="text-sm font-medium text-gray-700">Especialidades:</p>
                  <div className="flex flex-wrap gap-1">
                    {therapist.specialties.map((specialty, idx) => (
                      <Badge key={idx} variant="secondary" className="text-xs bg-teal-100 text-teal-700">
                        {specialty}
                      </Badge>
                    ))}
                  </div>
                </div>

                <Button variant="outline" className="w-full group-hover:bg-teal-600 group-hover:text-white group-hover:border-teal-600 transition-colors duration-300">
                  Ver Perfil Completo
                </Button>
              </CardContent>
            </Card>
          ))}
        </div>

        {/* Team Values */}
        <div className="bg-gradient-to-r from-teal-50 to-blue-50 rounded-3xl p-12">
          <div className="text-center mb-12">
            <h3 className="text-3xl font-bold text-gray-800 mb-4">Nuestro Compromiso</h3>
            <p className="text-lg text-gray-600 max-w-3xl mx-auto">
              Todos nuestros profesionales comparten valores fundamentales que guían nuestra práctica diaria.
            </p>
          </div>
          
          <div className="grid md:grid-cols-3 gap-8">
            <div className="text-center">
              <div className="w-16 h-16 bg-gradient-to-br from-teal-500 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <Heart className="w-8 h-8 text-white" />
              </div>
              <h4 className="text-xl font-semibold text-gray-800 mb-2">Atención Personalizada</h4>
              <p className="text-gray-600">Cada paciente recibe un trato individualizado y un plan específico para sus necesidades.</p>
            </div>
            <div className="text-center">
              <div className="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <BookOpen className="w-8 h-8 text-white" />
              </div>
              <h4 className="text-xl font-semibold text-gray-800 mb-2">Formación Continua</h4>
              <p className="text-gray-600">Nos mantenemos actualizados con las últimas técnicas y avances en logopedia.</p>
            </div>
            <div className="text-center">
              <div className="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                <Star className="w-8 h-8 text-white" />
              </div>
              <h4 className="text-xl font-semibold text-gray-800 mb-2">Excelencia Profesional</h4>
              <p className="text-gray-600">Mantenemos los más altos estándares de calidad en todos nuestros servicios.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Therapists;
