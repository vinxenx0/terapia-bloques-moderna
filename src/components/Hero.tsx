
import React from 'react';
import { Button } from "@/components/ui/button";
import { ArrowRight, Heart, Users, Award } from 'lucide-react';

const Hero = () => {
  return (
    <section id="inicio" className="relative py-20 overflow-hidden">
      <div className="container mx-auto px-4">
        <div className="grid lg:grid-cols-2 gap-12 items-center">
          {/* Content */}
          <div className="space-y-8">
            <div className="space-y-4">
              <Badge className="bg-teal-100 text-teal-700 hover:bg-teal-100">
                Centro Especializado en Logopedia
              </Badge>
              <h1 className="text-5xl lg:text-6xl font-bold text-gray-800 leading-tight">
                Cuidamos tu
                <span className="text-transparent bg-clip-text bg-gradient-to-r from-teal-600 to-blue-600">
                  {" "}comunicación
                </span>
              </h1>
              <p className="text-xl text-gray-600 leading-relaxed">
                Somos un equipo de profesionales especializados en logopedia y terapia del habla, 
                comprometidos con mejorar la calidad de vida de nuestros pacientes a través de 
                tratamientos personalizados y efectivos.
              </p>
            </div>

            <div className="flex flex-col sm:flex-row gap-4">
              <Button size="lg" className="bg-teal-600 hover:bg-teal-700 text-lg px-8">
                Solicitar Cita
                <ArrowRight className="ml-2 w-5 h-5" />
              </Button>
              <Button size="lg" variant="outline" className="text-lg px-8 border-teal-600 text-teal-600 hover:bg-teal-50">
                Conoce Nuestros Servicios
              </Button>
            </div>

            {/* Stats */}
            <div className="flex flex-wrap gap-8 pt-8">
              <div className="flex items-center space-x-3">
                <div className="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center">
                  <Users className="w-6 h-6 text-teal-600" />
                </div>
                <div>
                  <p className="text-2xl font-bold text-gray-800">500+</p>
                  <p className="text-gray-600">Pacientes Atendidos</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <div className="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                  <Award className="w-6 h-6 text-blue-600" />
                </div>
                <div>
                  <p className="text-2xl font-bold text-gray-800">15+</p>
                  <p className="text-gray-600">Años de Experiencia</p>
                </div>
              </div>
              <div className="flex items-center space-x-3">
                <div className="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                  <Heart className="w-6 h-6 text-green-600" />
                </div>
                <div>
                  <p className="text-2xl font-bold text-gray-800">98%</p>
                  <p className="text-gray-600">Satisfacción</p>
                </div>
              </div>
            </div>
          </div>

          {/* Image */}
          <div className="relative">
            <div className="relative z-10">
              <img
                src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1f?w=600&h=400&fit=crop&crop=center"
                alt="Terapia logopedia"
                className="w-full h-[500px] object-cover rounded-2xl shadow-2xl"
              />
            </div>
            {/* Decorative elements */}
            <div className="absolute -top-6 -left-6 w-72 h-72 bg-gradient-to-br from-teal-200 to-blue-200 rounded-full opacity-20 blur-3xl"></div>
            <div className="absolute -bottom-6 -right-6 w-72 h-72 bg-gradient-to-br from-blue-200 to-purple-200 rounded-full opacity-20 blur-3xl"></div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
