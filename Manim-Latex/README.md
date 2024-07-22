Manim

class <nome>(<tipo>):
    def construct(self):
    
Tipos: Scene, ThreeDScene.

manim -pql scene.py <nome>
ql, qk, qh, qp, qk

-> Scene
self.play(Create(a), run_time=t)
self.add(a)
self.play(FadeIn(a))
self.play(Write(text), run_time=t)

self.wait(t)
self.play(ReplacementTransform(a, b), run_time=t)

self.remove(a, b)
self.play(FadeOut(a))

FORMAS:
a = Circle()
b = Triangle()
c = Square()


-> ThreeDScene
axes = ThreeDAxes()
axes.add_coordinates()
self.play(Create(axes))

FORMAS:
surface1 = Surface(
              lambda u,v: axes.c2p(*(np.array([u, v, u**2/5 + v**2/5]))), 
              resolution = 20, 
              u_range=[-3,3],
              v_range=[-3,3]
          )

sphere1 = Sphere(
            center=(0, 0, 0),
            radius=2,
            resolution=(20, 20),
            u_range=[0.001, PI - 0.001],
            v_range=[0, TAU]
          )
surface3 = axes.plot_parametric_curve(
              lambda t: np.array([sin(t), cos(t), t]), 
              color=WHITE, 
              t_range=[-PI,PI]
          ).scale(0.15)

ATRIBUTOS:
.scale(1)
.set_x(-0.5).set_y(0.8)
.set_color(ORANGE)







TEXTOS:

- Variable
Variable(num, Text("int_var"), var_type=Integer)
Variable(num, "{a}_{i}", var_type=DecimalNumber)
var = 0.5
on_screen_var = Variable(var, Text("var"), num_decimal_places=3)
on_screen_var.label.set_color(RED)
on_screen_var.value.set_color(GREEN)

- MarkupText
fill_opacity=1, (opacidade)
stroke_width=0.1, (contorno)
color=BLUE, (cor)
font_size=40, (tamanho)
line_spacing=100, 
font='Lato', 
slant='NORMAL', 
weight='NORMAL', 
justify=True, 
gradient=None, 
tab_width=1, 
height=None, 
width=None, 
should_center=True, 
disable_ligatures=False, 
warn_missing_font=True



<b>bold</b>, <i>italic</i> and <b><i>bold+italic</i></b>
<ul>underline</ul> and <s>strike through</s>
<tt>typewriter font</tt>
<big>bigger font</big> and <small>smaller font</small>
<sup>superscript</sup> and <sub>subscript</sub>
<span underline="double" underline_color="green">double underline</span>
<span underline="error">error underline</span>
<span overline="single" overline_color="green">overline</span>
<span strikethrough="true" strikethrough_color="red">strikethrough</span>
<span font_family="sans">temporary change of font</span>
<span foreground="red">temporary change of color</span>
<span fgcolor="red">temporary change of color</span>
<gradient from="YELLOW" to="RED">temporary gradient</gradient>
![teste_ManimCE_v0 18 1](https://github.com/user-attachments/assets/9738f8d2-39ea-4f75-834d-20255b254ce5)





MathTex
Não aceita UTF8.
MathTex("a^2 + b^2 = c^2")
MathTex(r"\int_a^b f'(x) dx = f(b)- f(a)")


\documentclass[a4paper, 12pt] {article}\begin{document}teste\end{document}


LATEX

\documentclass[a4paper, 12pt] {article}
\userpackege[top=xcm, bottom=xcm, left=xcm, right=xcm]{geometry}
\userpackage[utf8]{inputenc}

\begin{document}
teste
\end{document}





- Code: https://docs.manim.community/en/stable/reference/manim.mobject.text.code_mobject.Code.html
code = '''Texto'''
rendered_code = Code(code=code, tab_width=4, background="window",language="Python", font="Monospace")
self.add(rendered_code)
